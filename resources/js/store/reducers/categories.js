import * as actionTypes from '../actions/actionTypes';
import { updateObject } from '../../shared/utility';

const initialState = {
    categories: null,
    loading: false,
};

const fetchAllCategoriesStart = ( state, action ) => {
    return updateObject( state, { loading: true } );
};

const fetchAllCategoriesSuccess = ( state, action ) => {
    return updateObject( state, {
		categories: action.categories,
		error: false,
        loading: false
    } );
};

const fetchAllCategoriesFail = ( state, action ) => {
    return updateObject( state, { loading: false, error: true } );
};

const reducer = ( state = initialState, action ) => {
    switch ( action.type ) {
        case actionTypes.FETCH_ALL_CATEGORIES_START: return fetchAllCategoriesStart( state, action );
        case actionTypes.FETCH_ALL_CATEGORIES_SUCCESS: return fetchAllCategoriesSuccess( state, action );
        case actionTypes.FETCH_ALL_CATEGORIES_FAIL: return fetchAllCategoriesFail( state, action );
        case actionTypes.FETCH_ALL_CATEGORIES_FAIL: return fetchAllCategoriesFail( state, action );
        default: return state;
    }
};

export default reducer;
