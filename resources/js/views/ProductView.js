import React, { Component } from 'react'
import { withRouter } from 'react-router-dom'
import { connect } from 'react-redux'

import { priceFormat, discountFormat } from '../shared/currency';
import Spinner from '../components/UI/Spinner/Spinner'
import * as actions from '../store/actions/index';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faHeart } from '@fortawesome/free-regular-svg-icons'
import SizeSelector from '../components/Products/SizeSelector';
import QuantitySelector from '../components/Products/QuantitySelector';
import AddToCart from '../components/Products/Product/AddToCart';
import OurRecommendations from '../components/Products/OurRecommendations';

class ProductView extends Component {
	state = {
		selectedImagePath: null,
		selectedSize: "",
		selectedQty: 1
	}

	componentDidMount() {
		this.props.onFetchAllProducts();
	}
	
	componentWillMount() {
		this.props.onFetchProductBySlug(this.props.match.params.product);
	}

	componentWillReceiveProps(nextProps) {
		if (nextProps.match.params.product !== this.props.match.params.product) {
			this.props.onFetchProductBySlug(nextProps.match.params.product);
		}
	}

	switchImage = path => this.setState({selectedImagePath: path})

	handleSizeChange = (size) => this.setState({selectedSize: size})
	handleQtyChange = (e) => this.setState({selectedQty: e.target.value})

	render() {
		let { product, products, error } = this.props
		let productOutput = <Spinner />
		let outputRecommendedProducts = error
			? <p className="text-center">Products can't be loaded!</p>
			: <Spinner />

		products
			? outputRecommendedProducts = <OurRecommendations products={products} />
			: outputRecommendedProducts = null

		if (product) {
			let thumbs = product.images.data.map((img, key) => (
				<div key={key} 
					onClick={() => this.switchImage(img.path)}
					className="cursor-pointer">
					<img className="h-auto mb-px" src={img.path} alt={product.name} />
				</div>
			))

			productOutput = (
				<div className="w-full my-px">
					<p className="capitalize text-lg text-grey-darkest">{product.name}</p>

					<div className="flex mb-4 pt-2">
						{/* LEFT COLUMN */}
						<div className="w-7/12">
							<div className="flex">
								<div className="flex flex-col px-2 w-1/6">
									{ thumbs }
								</div>
								<div className="w-5/6 px-6">
									<img 
										className="h-auto" src={this.state.selectedImagePath ? this.state.selectedImagePath : product.image.path} 
										alt={product.name} />
								</div>
							</div>
						</div>

						{/* RIGHT COLUMN */}
						<div className="w-5/12 px-2">
							<img src={product.brand.logo} alt={product.brand.name} />
							<h3 className="mt-2">{product.brand.name}</h3>
							<p className="text-sm text-grey-darker my-2">Item number {product.uuid}</p>
							<p className="py-2"><span className="line-through">{ priceFormat(product.rrp) }</span> *</p>
							<p className="py-2 text-sm">Now only: <span className="text-red text-xl font-semibold">{ priceFormat(product.final_price) }</span></p>
							<p className="py-2 text-sm">You save: <span className="text-red font-semibold">{ `${product.discount}%` }</span></p>
							<p className="py-2 text-sm">Including VAT <span className="underline">plus delivery costs</span></p>
							<p className="py-4 text-sm text-black underline">Size chart</p>

							<div className="flex">
								<SizeSelector selectOnChange={this.handleSizeChange} />
								
								<QuantitySelector selectOnChange={this.handleQtyChange} />
							</div>
							
							<div className="flex mt-8">
								<AddToCart product={product} size={this.state.selectedSize} qty={this.state.selectedQty} />
								<button className="bg-transparent hover:bg-grey-light text-black py-2 px-4 border border-black">
									<FontAwesomeIcon icon={faHeart} className="mr-3 text-red" />
									Add to wishlist
								</button>
							</div>
						</div>
					</div>

					{ outputRecommendedProducts }
				</div>
			)
		}
		
		return productOutput
	}
}

const mapStateToProps = state => {
	return {
		product: state.product.product,
		productError: state.product.error,
		products: state.products.products,
		productsError: state.products.error,
	}
}

const mapDispatchToProps = dispatch => {
	return {
		onFetchProductBySlug: (slug) => dispatch(actions.fetchProductBySlug(slug)),
		onFetchAllProducts: () => dispatch(actions.fetchAllProducts()),
	}
}

export default withRouter(connect(mapStateToProps, mapDispatchToProps)(ProductView))