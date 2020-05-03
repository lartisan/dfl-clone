import React, { Component } from 'react'
import { connect } from 'react-redux'

import * as actions from '../../../store/actions';

class AddToCart extends Component {
	addToCart = (e, product, size, qty) => {
		e.preventDefault()
		product.size = size
		product.qty = 1*qty
		this.props.onAddToCart(product)
	}

	render() {
		let { product, size, qty } = this.props
		return (
			size !== ""
				? <button
					onClick={(e) => this.addToCart(e, product, size, qty)}
					className="bg-green hover:bg-green-dark text-white py-2 px-4 mr-3 focus:outline-none">
					Add to shopping cart
				</button>
				: <button
					disabled
					className="bg-grey text-black py-2 px-4 mr-3 focus:outline-none opacity-50 cursor-not-allowed">
					Select size first
				</button>
		)
	}
}

const mapStateToProps = state => {
	return {
		// items: state.cart.items,
		// error: state.cart.error,
	}
}

const mapDispatchToProps = dispatch => {
	return {
		onAddToCart: (product) => dispatch(actions.addToCart(product)),
	}
}

export default connect(mapStateToProps, mapDispatchToProps)(AddToCart)