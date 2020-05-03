import React, { Component } from 'react'

// import classes from './Breadcrumbs.css'

class Breadcrumbs extends Component {
	render() {
		let { category, categoryList } = this.props

		return (
			<div className="flex flex-wrap my-3">
				<div className="w-4/5 ml-auto px-5 py-3 my-auto flex">
					<p className="capitalize">Men</p>
					<p className="capitalize ml-10">{category.name}</p>
					{ categoryList ? <p className="capitalize ml-10">{categoryList.name}</p> : null }
				</div>
			</div>
		)
	}
}

export default Breadcrumbs
