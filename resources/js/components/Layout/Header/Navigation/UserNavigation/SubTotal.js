import React, { Component } from 'react'
import { connect } from 'react-redux'

import { priceFormat } from '../../../../../shared/currency';

class SubTotal extends Component {
	render () {
		return (
			<div>
				<p className="mr-4 text-xl">{ priceFormat(this.props.subTotal) }</p>
			</div>
		)
	}
}

const mapStateToProps = state => {
	return {
		subTotal: state.cart.subTotal,
		error: state.cart.error,
	}
}

export default connect(mapStateToProps)(SubTotal)