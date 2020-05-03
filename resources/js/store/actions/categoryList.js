import * as actionTypes from './actionTypes';

export const fetchCategoryListSuccess = ( categoryList ) => {
    return {
        type: actionTypes.FETCH_CATEGORY_LIST_SUCCESS,
        categoryList: categoryList
    };
};

export const fetchCategoryListFail = ( error ) => {
    return {
        type: actionTypes.FETCH_CATEGORY_LIST_FAIL,
        error: error
    };
};

export const fetchCategoryListStart = () => {
    return {
        type: actionTypes.FETCH_CATEGORY_LIST_START
    };
};

export const fetchCategoryList = (category, categoryList) => {
    return {
		type: actionTypes.FETCH_CATEGORY_LIST,
		category: category,
		categoryList: categoryList,
	}
};