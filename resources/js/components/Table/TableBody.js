import React, { Component } from 'react'
import { NavLink } from 'react-router-dom'

import { priceFormat } from '../../shared/currency'
import QuantitySelector from '../Products/QuantitySelector'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import	{ faTimes } from '@fortawesome/free-solid-svg-icons'

class TableBody extends Component {
	render() {
		let tableBody = this.props.cartItems.map(item => {
			return (<tr key={item.uuid}>
				<td className="flex flex-wrap">
					<div className="w-1/4">
						<NavLink to={'/products/' + item.slug}>
							<img className="w-32 h-auto" src={item.image.path} alt={item.name} />
						</NavLink>
					</div>
					<div className="w-3/4 px-2 ml-auto">
						<p className="text-sm mb-2">{item.name}</p>
						<p className="text-sm mb-2">{item.uuid}</p>
						<p className="text-sm mb-2">size: {item.size}</p>
					</div>
				</td>
				<td>
					<div className="flex flex-col">
						<QuantitySelector selectedValue={item.qty} />
						<NavLink to="" className="mt-24">
							<FontAwesomeIcon icon={faTimes} className="text-red mr-2" />
							<span className="text-black text-sm">Remove item</span>
						</NavLink>
					</div>
				</td>
				<td className="text-center">{ priceFormat(item.rrp) }</td>
				<td className="text-center">{ priceFormat(item.rrp - item.final_price) }</td>
				<td className="text-center">{ priceFormat(item.final_price) }</td>
				<td className="text-right">{ priceFormat(item.final_price * item.qty) }</td>
			</tr>)
		})

		return (
			<tbody>
				{ tableBody }
			</tbody>
		)
	}
}

export default TableBody
