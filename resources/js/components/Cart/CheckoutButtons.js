import React, { Component } from 'react'
import { NavLink } from 'react-router-dom'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faLock } from '@fortawesome/free-solid-svg-icons'

import Aux from '../../hoc/Aux/Aux'

class CheckoutButtons extends Component {
	render() {
		return (
			<Aux>
				<div className="flex flex-wrap inline-flex">
					<NavLink to="">
						<img
							// className="w-full h-auto"
							src="https://media.dress-for-less.com/wcsstore/DFLStorefrontAssetStore//images/paypal/ECS-1@2x.png"
							width="170"
							height="32"
							alt="PayPal" />
					</NavLink>

					<span className="mx-2 mt-2">or</span>

					<NavLink to="" className="bg-green hover:bg-green-dark text-center text-white text-sm no-underline py-2 px-4">
						Proceed to checkout now
					</NavLink>
				</div>
				<p className="text-right mt-3">
					SSL security
					<FontAwesomeIcon className="ml-2" icon={faLock} />
				</p>
			</Aux>
		)
	}
}

export default CheckoutButtons