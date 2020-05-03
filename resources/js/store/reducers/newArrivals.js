import * as actionTypes from '../actions/actionTypes';
import { updateObject } from '../../shared/utility';

const initialState = {
    products: null,
    currentPage: null,
    lastPage: null,
    loading: false,
};

const fetchNewArrivalsStart = ( state, action ) => {
    return updateObject( state, { loading: true } );
};

const fetchNewArrivalsSuccess = ( state, action ) => {
    return updateObject( state, {
        products: action.products,
        currentPage: action.meta.current_page,
        lastPage: action.meta.last_page,
		error: false,
        loading: false
    } );
};

const fetchNewArrivalsFail = ( state, action ) => {
    return updateObject( state, { loading: false, error: true } );
};

const reducer = ( state = initialState, action ) => {
    switch ( action.type ) {
        case actionTypes.FETCH_NEW_ARRIVALS_START: return fetchNewArrivalsStart( state, action );
        case actionTypes.FETCH_NEW_ARRIVALS_SUCCESS: return fetchNewArrivalsSuccess( state, action );
        case actionTypes.FETCH_NEW_ARRIVALS_FAIL: return fetchNewArrivalsFail( state, action );
        default: return state;
    }
};

export default reducer;
