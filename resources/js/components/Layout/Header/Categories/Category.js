import React, { Component } from 'react'
import { NavLink, withRouter } from 'react-router-dom'

import CategoryList from './CategoryList';

class Category extends Component {
    render() {
		const category = this.props.categoryData

		const categoryOutput = (
			<div className="group">
				<div className="text-sm text-white hover:bg-white hover:text-black transition">
					<div className="flex text-white items-center cursor-pointer uppercase border-b-0">
						<NavLink
                            to={"/"+category.slug}
							className="no-underline py-2 px-3 text-white hover:text-black group-hover:text-black"
							activeClassName="activeCategory">{category.name}</NavLink>
					</div>

					{ category.children && category.children.length ? <CategoryList category={category} /> : null }
				</div>
			</div>
		)

		return categoryOutput
	}
}

export default withRouter(Category)
