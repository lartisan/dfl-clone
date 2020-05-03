import * as actionTypes from '../actions/actionTypes';
import { updateObject } from '../../shared/utility';

const initialState = {
    category: null,
    categoryList: null,
    loading: false,
};

const fetchCategoryListStart = ( state, action ) => {
    return updateObject( state, { loading: true } );
};

const fetchCategoryListSuccess = ( state, action ) => {
    return updateObject( state, {
		category: action.category,
		categoryList: action.categoryList,
		error: false,
        loading: false
    } );
};

const fetchCategoryListFail = ( state, action ) => {
    return updateObject( state, { loading: false, error: true } );
};

const reducer = ( state = initialState, action ) => {
    switch ( action.type ) {
        case actionTypes.FETCH_CATEGORY_LIST_START: return fetchCategoryListStart( state, action );
        case actionTypes.FETCH_CATEGORY_LIST_SUCCESS: return fetchCategoryListSuccess( state, action );
        case actionTypes.FETCH_CATEGORY_LIST_FAIL: return fetchCategoryListFail( state, action );
        default: return state;
    }
};

export default reducer;
