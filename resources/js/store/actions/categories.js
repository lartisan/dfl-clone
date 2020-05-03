import * as actionTypes from './actionTypes';

export const fetchAllCategoriesSuccess = ( categories ) => {
    return {
        type: actionTypes.FETCH_ALL_CATEGORIES_SUCCESS,
        categories: categories
    };
};

export const fetchAllCategoriesFail = ( error ) => {
    return {
        type: actionTypes.FETCH_ALL_CATEGORIES_FAIL,
        error: error
    };
};

export const fetchAllCategoriesStart = () => {
    return {
        type: actionTypes.FETCH_ALL_CATEGORIES_START
    };
};

export const fetchAllCategories = () => {
    return {
		type: actionTypes.FETCH_ALL_CATEGORIES
	}
};
