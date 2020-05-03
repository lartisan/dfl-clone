import React, { Component } from 'react'
import { NavLink, withRouter } from 'react-router-dom'

import Aux from '../../../../hoc/Aux/Aux'

class CategoryList extends Component {
	render () {
		const category = this.props.category
		const categoryLists = category.children

		const list = categoryLists.map(categoryList => (
			<NavLink
				to={'/' + category.slug + '/' + categoryList.slug}
				className="capitalize no-underline hover:underline cursor-pointer px-3 py-2 block text-black"
				key={categoryList.slug}>
				{categoryList.name}
			</NavLink>
		))

		return (
			<div className="absolute z-50 -mx-px items-center border border-t-0 border-black bg-white invisible group-hover:visible w-full pin-l">
				<NavLink
					to={category.slug}
					className="font-bold no-underline hover:underline cursor-pointer px-3 py-3 block text-black">
					All Products
				</NavLink>

				{list}
			</div>
		)
	}
}

export default withRouter(CategoryList)
