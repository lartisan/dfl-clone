import React, { Component } from 'react'
import { withRouter } from 'react-router-dom'
import { connect } from 'react-redux'

import * as actions from '../store/actions/index';
import Aux from '../hoc/Aux/Aux'
import Spinner from '../components/UI/Spinner/Spinner'
import ProductCard from '../components/Products/Product/ProductCard'
import Sidebar from '../components/Layout/Sidebar';
import Breadcrumbs from '../components/Layout/Breadcrumbs';
import Filters from '../components/Layout/Filters';

class CategoryList extends Component {
	componentWillMount() {
		this.props.onFetchCategoryList(this.props.match.params.category, this.props.match.params.categoryList);
		this.props.onFetchCategoryBySlug(this.props.match.params.category);
	}

	componentWillReceiveProps(nextProps) {
		if (nextProps.match.params.category !== this.props.match.params.category) {
			this.props.onFetchCategoryBySlug(nextProps.match.params.category);
		}
		if (nextProps.match.params.categoryList !== this.props.match.params.categoryList) {
			this.props.onFetchCategoryList(nextProps.match.params.category, nextProps.match.params.categoryList);
		}
	}

	render() {
		let { category, categoryList } = this.props
		let breadcrumbs = null
		let filters = <Filters />
		let leftColumn = <Spinner />
		let products = <Spinner />

		if (category && categoryList) {
			leftColumn = <Sidebar category={category} categoryList={categoryList} />

			breadcrumbs = <Breadcrumbs category={category} categoryList={categoryList} />

			products = (
				<div className="flex flex-wrap max-w-2xl mx-auto my-8">
					{categoryList.products.map((product) => (
                        <div className="w-full md:w-1/2 lg:w-1/3 flex flex-col" key={product.uuid}>
						    <ProductCard imgClasses="aspect-9x16 rounded-t" product={product} />
                        </div>
					))}
				</div>
			)
		}

		return (
			<Aux>
				<div className="bg-hero h-hero-sm flex items-center justify-center z-0"></div>

				{ breadcrumbs }

				<div className="flex -mx-2">
					{/* LEFT COLUMN */}
					{leftColumn}

					{/* RIGHT COLUMN */}
					<div className="w-4/5 px-2">
						{ filters }
						{ products }
					</div>
				</div>
			</Aux>
		)
	}
}

const mapStateToProps = state => {
	return {
		category: state.category.category,
		categoryList: state.categoryList.categoryList,
		error: state.category.error,
	}
}

const mapDispatchToProps = dispatch => {
	return {
		onFetchCategoryBySlug: (category) => dispatch(actions.fetchCategoryBySlug(category)),
		onFetchCategoryList: (category, categoryList) => dispatch(actions.fetchCategoryList(category, categoryList)),
	}
}

export default withRouter(connect(mapStateToProps, mapDispatchToProps)(CategoryList))
