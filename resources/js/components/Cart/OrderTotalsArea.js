import React, { Component } from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faCheck } from '@fortawesome/free-solid-svg-icons'
import Aux from '../../hoc/Aux/Aux';

class OrderTotalsArea extends Component {
	render() {
		return (
			<Aux>
				{/* LEFT */}
				<div className="w-7/12">
					<div className="bg-green-lightest p-6 mx-4">
						<p className="font-semibold">Your benefits</p>
						<div className="flex flex-wrap my-3">
							<div className="w-1/2">
								<FontAwesomeIcon icon={faCheck} className="mr-2" />
								secure payment
							</div>
							<div className="w-1/2">
								<FontAwesomeIcon icon={faCheck} className="mr-2" />
								item available now
							</div>
						</div>
						<div className="flex flex-wrap my-3">
							<div className="w-1/2">
								<FontAwesomeIcon icon={faCheck} className="mr-2" />
								14-days return policy
							</div>
							<div className="w-1/2">
								<FontAwesomeIcon icon={faCheck} className="mr-2" />
								Quick delivery
							</div>
						</div>
					</div>
				</div>

				{/* RIGHT */}
				<div className="w-5/12">
					<div className="flex flex-wrap pt-6">
						<div className="w-5/12">
							<p className="text-lg font-semibold">Total</p>
							<p className="text-xs font-semibold">(including VAT)</p>
						</div>
						<div className="w-7/12 ml-auto text-right text-lg font-semibold">53.91 €</div>
					</div>

					<div className="flex flex-wrap pt-6">
						<div className="w-5/12">
							<p className="text-red text-sm">You save*</p>
						</div>
						<div className="w-7/12 ml-auto text-right text-red text-sm font-semibold">51.98 €</div>
					</div>

				</div>
			</Aux>
		)
	}
}

export default OrderTotalsArea