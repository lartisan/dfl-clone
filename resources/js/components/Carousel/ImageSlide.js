import React from 'react'

import ProductCard from '../Products/Product/ProductCard'

const ImageSlide = ({ products }) => {
	let outputProducts = products.map((product, key) => (
		<div className="w-full md:w-1/2 lg:w-1/6 flex flex-col" key={key}>
			<ProductCard imgClasses="aspect-3x4 rounded-t" product={product} />
		</div>
	))

	return outputProducts
}

export default ImageSlide