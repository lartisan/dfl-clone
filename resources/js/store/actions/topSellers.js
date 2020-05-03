import * as actionTypes from './actionTypes';

export const fetchTopSellersSuccess = ( products, meta ) => {
    return {
        type: actionTypes.FETCH_TOP_SELLERS_SUCCESS,
        products: products,
        meta: meta,
    };
};

export const fetchTopSellersFail = ( error ) => {
    return {
        type: actionTypes.FETCH_TOP_SELLERS_FAIL,
        error: error
    };
};

export const fetchTopSellersStart = () => {
    return {
        type: actionTypes.FETCH_TOP_SELLERS_START
    };
};

export const fetchTopSellers = (page) => {
    return {
        type: actionTypes.FETCH_TOP_SELLERS,
        page: page
	}
};
