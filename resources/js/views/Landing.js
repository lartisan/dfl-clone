import React, { Component } from 'react'

import Aux from '../hoc/Aux/Aux'
import TopSellers from '../components/Products/TopSellers';
import NewArrivals from '../components/Products/NewArrivals';

class Landing extends Component {
	render() {
		return (
			<Aux>
				<div className="bg-hero h-hero flex items-center justify-center z-0"></div>

				<TopSellers />
				<NewArrivals />
			</Aux>
		)
	}
}

export default Landing