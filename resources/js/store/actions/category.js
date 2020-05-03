import * as actionTypes from './actionTypes';

export const fetchCategoryBySlugSuccess = ( category ) => {
    return {
        type: actionTypes.FETCH_CATEGORY_BY_SLUG_SUCCESS,
        category: category
    };
};

export const fetchCategoryBySlugFail = ( error ) => {
    return {
        type: actionTypes.FETCH_CATEGORY_BY_SLUG_FAIL,
        error: error
    };
};

export const fetchCategoryBySlugStart = () => {
    return {
        type: actionTypes.FETCH_CATEGORY_BY_SLUG_START
    };
};

export const fetchCategoryBySlug = (categorySlug) => {
    return {
		type: actionTypes.FETCH_CATEGORY_BY_SLUG,
		categorySlug: categorySlug
	}
};