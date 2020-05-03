import React, { Component } from 'react'
import { withRouter } from 'react-router-dom'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faChevronLeft } from '@fortawesome/free-solid-svg-icons';

class EmptyCart extends Component {
	goHome = () => this.props.history.push('/')
	
	render() {
		return (
			<div className="text-center">
				<h1 className="my-8">Your shopping cart is empty!</h1>
				<button onClick={this.goHome} className="bg-transparent text-black font-semibold py-2 px-4 border border-grey-darker">
					<FontAwesomeIcon icon={faChevronLeft} className="mr-2" />
					Back to shopping
				</button>
				<div className="my-8">
					<img src="https://media.dress-for-less.com/wcsstore/DFLStorefrontAssetStore/images/basket_empty.jpg" alt="Empty cart" />
				</div>
			</div>
		)
	}
}

export default withRouter(EmptyCart)