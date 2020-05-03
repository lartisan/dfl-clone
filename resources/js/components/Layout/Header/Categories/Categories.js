import React, { Component } from 'react'
import { connect } from 'react-redux'
import { withRouter } from 'react-router-dom'

import * as actions from '../../../../store/actions';
import Category from './Category'

class Categories extends Component {
	componentDidMount () {
        this.props.onFetchAllCategories();
	}

	render() {
		let { categories } = this.props
		let outputCategories = null

		if(categories) {
			outputCategories = categories.map(category => {
				return <Category categoryData={category} key={category.slug} />
			})
		}

		return (
			<div className="hidden bg-black md:block border border-black content-box z-50">
				<div className="relative container mx-auto">
					<div className="md:flex">
						{outputCategories}
					</div>
				</div>
			</div>
		);
	}
}

const mapStateToProps = state => {
	return {
		categories: state.categories.categories,
		error: state.categories.error,
	}
}

const mapDispatchToProps = dispatch => {
    return {
        onFetchAllCategories: () => dispatch(actions.fetchAllCategories()),
    }
}

export default withRouter(connect(mapStateToProps, mapDispatchToProps)(Categories))
