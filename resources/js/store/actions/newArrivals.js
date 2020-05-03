import * as actionTypes from './actionTypes';

export const fetchNewArrivalsSuccess = ( products, meta ) => {
    return {
        type: actionTypes.FETCH_NEW_ARRIVALS_SUCCESS,
        products: products,
        meta: meta,
    };
};

export const fetchNewArrivalsFail = ( error ) => {
    return {
        type: actionTypes.FETCH_NEW_ARRIVALS_FAIL,
        error: error
    };
};

export const fetchNewArrivalsStart = () => {
    return {
        type: actionTypes.FETCH_NEW_ARRIVALS_START
    };
};

export const fetchNewArrivals = (page) => {
    return {
        type: actionTypes.FETCH_NEW_ARRIVALS,
        page: page
	}
};
