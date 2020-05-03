import React, { Component } from 'react'

import { NavLink, withRouter } from 'react-router-dom'

class Sidebar extends Component {
	render() {
		let { category } = this.props
		let children = category.children.map(categoryList => (
			<div
				key={categoryList.slug}
				className="border-t border-grey-light">
				<NavLink
                    to={'/' + category.slug + '/' + categoryList.slug}
                    key={categoryList.slug}
					className="flex capitalize no-underline text-sm text-grey-darker p-3 hover:underline"
					activeClassName="activeCategoryList">
					{categoryList.name}
				</NavLink>
			</div>
		))

		return (
			<div className="w-1/5 px-2">
				<div className="capitalize text-sm font-semibold border-t border-grey bg-grey-lighter h-auto p-3">
					{ category.name}
				</div>
				<div className="mt-3">
					{children}
				</div>
			</div>
		)
	}
}

export default withRouter(Sidebar)
