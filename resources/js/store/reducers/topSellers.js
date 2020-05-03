import * as actionTypes from '../actions/actionTypes';
import { updateObject } from '../../shared/utility';

const initialState = {
    products: null,
    currentPage: null,
    lastPage: null,
    loading: false,
};

const fetchTopSellersStart = ( state, action ) => {
    return updateObject( state, { loading: true } );
};

const fetchTopSellersSuccess = ( state, action ) => {
    return updateObject( state, {
        products: action.products,
        currentPage: action.meta.current_page,
        lastPage: action.meta.last_page,
		error: false,
        loading: false
    } );
};

const fetchTopSellersFail = ( state, action ) => {
    return updateObject( state, { loading: false, error: true } );
};

const reducer = ( state = initialState, action ) => {
    switch ( action.type ) {
        case actionTypes.FETCH_TOP_SELLERS_START: return fetchTopSellersStart( state, action );
        case actionTypes.FETCH_TOP_SELLERS_SUCCESS: return fetchTopSellersSuccess( state, action );
        case actionTypes.FETCH_TOP_SELLERS_FAIL: return fetchTopSellersFail( state, action );
        default: return state;
    }
};

export default reducer;
