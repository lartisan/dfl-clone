import * as actionTypes from '../actions/actionTypes';
import { updateObject } from '../../shared/utility';

const initialState = {
    category: null,
    loading: false,
};

const fetchCategoryBySlugStart = ( state, action ) => {
    return updateObject( state, { loading: true } );
};

const fetchCategoryBySlugSuccess = ( state, action ) => {
    return updateObject( state, {
		category: action.category,
		error: false,
        loading: false
    } );
};

const fetchCategoryBySlugFail = ( state, action ) => {
    return updateObject( state, { loading: false, error: true } );
};

const reducer = ( state = initialState, action ) => {
    switch ( action.type ) {
        case actionTypes.FETCH_CATEGORY_BY_SLUG_START: return fetchCategoryBySlugStart( state, action );
        case actionTypes.FETCH_CATEGORY_BY_SLUG_SUCCESS: return fetchCategoryBySlugSuccess( state, action );
        case actionTypes.FETCH_CATEGORY_BY_SLUG_FAIL: return fetchCategoryBySlugFail( state, action );
        default: return state;
    }
};

export default reducer;