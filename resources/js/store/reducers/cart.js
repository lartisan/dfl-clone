import * as actionTypes from '../actions/actionTypes';
import { updateObject } from '../../shared/utility';
import * as fromProduct from '../actions'

const initialState = {
	addedSlugs: [],
	itemsDataBySlug: {},
	error: false,
	loading: false,
};

const addToCart = (state = initialState, action) => {
	// if (state.addedSlugs.indexOf(action.slug) !== -1) {
	// 	return state
	// }

	const updatedItem
	const updatedItems = updateObject(state.itemsDataBySlug, { [action.slug]: updatedItem })

	return updateObject(state, {
		addedSlugs: state.addedSlugs.concat(action.slug),
		itemsDataBySlug: updatedItems
	})
}

const reducer = (state = initialState, action) => {
	switch (action.type) {
		case actionTypes.ADD_TO_CART: return addToCart(state, action);
		default: return state;
	}
};

export default reducer;
