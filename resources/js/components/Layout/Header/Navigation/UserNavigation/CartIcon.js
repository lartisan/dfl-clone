import React, { Component } from 'react'
import { withRouter, NavLink } from 'react-router-dom'
import { connect } from 'react-redux'

import { priceFormat, discountFormat } from '../../../../../shared/currency';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faShoppingBag } from '@fortawesome/free-solid-svg-icons'

class CartIcon extends Component {
	goToCartPage = () => this.props.history.push('/cart')

	render() {
		let { itemsInCart } = this.props
		// console.log(items)
		let carticonOutput = <FontAwesomeIcon icon={faShoppingBag} className="text-xl" />
		let itemsList = <div className="border-b border-grey-light px-2 py-4 text-left text-sm">Your shopping cart is empty</div>
		let proceedToCheckoutButton = null
		let displaySubTotal = 0

		if (itemsInCart) {
			carticonOutput = (
				<span className="fa-layers fa-fw text-xl">
					<FontAwesomeIcon icon={faShoppingBag} />
					<span className="fa-layers-counter fa-layers-top-right text-4xl">{itemsInCart}</span>
				</span>
			)
		}

		// if (items.length) {
		// 	displaySubTotal = items.reduce((subTotal, item) => subTotal + item.qty * item.final_price, 0)
		// 	itemsList = items.map(item => (
		// 		<div className="p-3" key={item.uuid}>
		// 			<div className="flex">
		// 				<div className="w-1/3 h-auto">
		// 					<img src={item.image.path} alt={item.name} />
		// 				</div>
		// 				<div className="w-2/3 px-2">
		// 					<p className="bg-grey-lighter text-xs p-2 w-auto">{item.qty} x</p>
		// 					<p className="text-sm">{item.name}</p>
		// 					<p className="text-sm text-grey-dark">size: {item.size}</p>
		// 					<p className="text-lg">{priceFormat(item.final_price)}</p>
		// 				</div>
		// 			</div>
		// 		</div>
		// 	))


		// 	proceedToCheckoutButton = (<button
		// 		// onClick={this.goToCartPage}
		// 		className="bg-green text-xs text-white font-semibold py-2 px-4 mb-3 w-full">
		// 		Proceed to checkout
		// 	</button>)
		// }

		return (
			<div className="group relative">
				<NavLink to="/cart" className="text-black">{carticonOutput}</NavLink>

				<div className="absolute z-50 -ml-32 pin-r border border-grey-light bg-white invisible group-hover:visible w-64 h-auto">
					<div className="bg-grey-lighter w-full h-8"></div>

					{itemsList}

					<div className="border-b border-grey-light p-3">
						<div className="flex flex-col border-t border-grey-light">
							<p className="py-2 text-black text-sm font-semibold">Subtotal</p>
							<p className="py-2 text-xs">(Including VAT and excluding delivery costs)</p>
							<p className="py-2 text-sm font-semibold text-right">{ priceFormat(displaySubTotal) }</p>
						</div>
					</div>

					<div className="text-center py-3 px-6">
						{proceedToCheckoutButton}
						<button
							onClick={this.goToCartPage}
							className="bg-transparent text-xs text-green-dark font-semibold py-2 px-4 border border-grey-dark w-full">
							View shopping cart
						</button>
					</div>
				</div>
			</div>
		)
	}
}

const mapStateToProps = state => {
	return {
		// subTotal: state.cart.subTotal,
		itemsInCart: state.cart.addedSlugs.length,
		// error: state.cart.error,
	}
}

export default withRouter(connect(mapStateToProps)(CartIcon))
