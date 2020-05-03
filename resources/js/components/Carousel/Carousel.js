import React, { Component } from 'react'

import ImageSlide from './ImageSlide';
import Arrow from './Arrow';

class Carousel extends Component {
	state = {
		currentPage: 1
	}

	goToPage = (page) => {
		const { onPageChanged = page => page } = this.props
		this.setState({ currentPage: page }, () => onPageChanged(page))
	}

	prevPage = () => {
		const { currentPage } = this.state
		const { lastPage } = this.props
		this.goToPage(currentPage === 1 ? lastPage : currentPage - 1)
		this.setState({ currentPage: currentPage - 1 })
	}

	nextPage = () => {
		const { currentPage } = this.state
		const { lastPage } = this.props
		this.goToPage(currentPage === lastPage ? 1 : currentPage + 1)
		this.setState({ currentPage: currentPage + 1 })
	}

	render() {
		let { products } = this.props

		if (products)
			return (
				<div className="flex flex-wrap max-w-2xl mx-auto my-8 relative">
					<Arrow
						direction="l"
						clickFunction={this.prevPage} />

					<ImageSlide products={products} />

					<Arrow
						direction="r"
						clickFunction={this.nextPage} />
				</div>
			)
	}
}

export default Carousel
