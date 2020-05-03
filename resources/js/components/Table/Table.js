import React, { Component } from 'react'
import PropTypes from 'prop-types'

import TableHead from './TableHead';
import TableBody from './TableBody';
import OrderTotalsArea from '../Cart/OrderTotalsArea'
import RedeemVoucher from '../Cart/RedeemVoucher';

// Requires 'tailwindcss-tables' plugin
class Table extends Component {
	render() {
		const { tableHead, cartItems } = this.props

		return (
			<div className="mt-4">
				<table className="table">
					<TableHead thItems={tableHead} />
					<TableBody cartItems={cartItems} />
				</table>

				<div className="flex flex-wrap border-t border-grey-light py-4">
					<RedeemVoucher />
					<OrderTotalsArea />
				</div>
			</div>
        )
    }
}

Table.propTypes = {
    tableHead: PropTypes.array.isRequired,
    cartItems: PropTypes.PropTypes.arrayOf(PropTypes.object).isRequired,
};

export default Table
