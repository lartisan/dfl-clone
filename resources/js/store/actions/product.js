import * as actionTypes from './actionTypes';

export const fetchProductBySlugSuccess = ( product ) => {
    return {
        type: actionTypes.FETCH_PRODUCT_BY_SLUG_SUCCESS,
        product
    };
};

export const fetchProductBySlugFail = ( error ) => {
    return {
        type: actionTypes.FETCH_PRODUCT_BY_SLUG_FAIL,
        error
    };
};

export const fetchProductBySlugStart = () => {
    return {
        type: actionTypes.FETCH_PRODUCT_BY_SLUG_START
    };
};

export const fetchProductBySlug = (productSlug) => {
    return {
		type: actionTypes.FETCH_PRODUCT_BY_SLUG,
		productSlug
	}
};