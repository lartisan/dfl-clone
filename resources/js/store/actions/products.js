import * as actionTypes from './actionTypes';

export const fetchAllProductsSuccess = ( products, meta ) => {
    return {
        type: actionTypes.FETCH_ALL_PRODUCTS_SUCCESS,
        products: products,
        meta: meta,
    };
};

export const fetchAllProductsFail = ( error ) => {
    return {
        type: actionTypes.FETCH_ALL_PRODUCTS_FAIL,
        error: error
    };
};

export const fetchAllProductsStart = () => {
    return {
        type: actionTypes.FETCH_ALL_PRODUCTS_START
    };
};

export const fetchAllProducts = (page) => {
    return {
        type: actionTypes.FETCH_ALL_PRODUCTS,
        page: page
	}
};
