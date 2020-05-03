import * as actionTypes from '../actions/actionTypes';
import { updateObject } from '../../shared/utility';

const initialState = {
    products: null,
    currentPage: null,
    lastPage: null,
    loading: false,
};

const fetchAllProductsStart = ( state, action ) => {
    return updateObject( state, { loading: true } );
};

const fetchAllProductsSuccess = ( state, action ) => {
    return updateObject( state, {
        products: action.products,
        currentPage: action.meta.current_page,
        lastPage: action.meta.last_page,
		error: false,
        loading: false
    } );
};

const fetchAllProductsFail = ( state, action ) => {
    return updateObject( state, { loading: false, error: true } );
};

const reducer = ( state = initialState, action ) => {
    switch ( action.type ) {
        case actionTypes.FETCH_ALL_PRODUCTS_START: return fetchAllProductsStart( state, action );
        case actionTypes.FETCH_ALL_PRODUCTS_SUCCESS: return fetchAllProductsSuccess( state, action );
        case actionTypes.FETCH_ALL_PRODUCTS_FAIL: return fetchAllProductsFail( state, action );
        default: return state;
    }
};

export default reducer;
