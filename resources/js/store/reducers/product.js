import * as actionTypes from '../actions/actionTypes';
import { updateObject } from '../../shared/utility';

const initialState = {
    product: null,
    loading: false,
};

const fetchProductBySlugStart = ( state, action ) => {
    return updateObject( state, { loading: true } );
};

const fetchProductBySlugSuccess = ( state, action ) => {
    return updateObject( state, {
		product: action.product,
		error: false,
        loading: false
    } );
};

const fetchProductBySlugFail = ( state, action ) => {
    return updateObject( state, { loading: false, error: true } );
};

const reducer = ( state = initialState, action ) => {
    switch ( action.type ) {
        case actionTypes.FETCH_PRODUCT_BY_SLUG_START: return fetchProductBySlugStart( state, action );
        case actionTypes.FETCH_PRODUCT_BY_SLUG_SUCCESS: return fetchProductBySlugSuccess( state, action );
        case actionTypes.FETCH_PRODUCT_BY_SLUG_FAIL: return fetchProductBySlugFail( state, action );
        default: return state;
    }
};

export default reducer;