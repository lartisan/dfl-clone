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

class CategoryView extends Component {
	componentWillMount() {
		this.props.onFetchCategoryBySlug(this.props.match.params.category);
	}

	componentWillReceiveProps(nextProps) {
		if (nextProps.match.params.category !== this.props.match.params.category) {
			this.props.onFetchCategoryBySlug(nextProps.match.params.category);
		}
	}

	render() {
		let { category } = this.props
		let breadcrumbs = null
		let filters = <Filters />
		let leftColumn = <Spinner />
		let products = <Spinner />

		if (category) {
			leftColumn = <Sidebar category={category} />

			breadcrumbs = <Breadcrumbs category={category} />

			products = (
				<div className="flex flex-wrap max-w-2xl mx-auto my-8">
					{category.products.map((product) => (
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
		error: state.category.error,
	}
}

const mapDispatchToProps = dispatch => {
	return {
		onFetchCategoryBySlug: (slug) => dispatch(actions.fetchCategoryBySlug(slug)),
	}
}

export default withRouter(connect(mapStateToProps, mapDispatchToProps)(CategoryView))
