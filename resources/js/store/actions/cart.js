import * as actionTypes from './actionTypes';

const addToCartUnsafe = product => ({
	type: actionTypes.ADD_TO_CART,
	slug: product.slug,
	size: product.size,
	qty: product.qty,
})

export const addToCart = product => (dispatch) => {
	if(product.inventory > 0) {
		dispatch(addToCartUnsafe(product))
	}
}

