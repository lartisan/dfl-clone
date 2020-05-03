import { put } from 'redux-saga/effects';
import axios from '../../axios-api';

import * as actions from '../actions/index';

export function* fetchNewArrivalsSaga(action) {
	yield put(actions.fetchNewArrivalsStart());

	try {
		const response = yield axios.get( '/products?page=' + action.page )
        const fetchedProducts = [];
        let meta = {};

		for ( let key in response.data.data ) {
			fetchedProducts.push( {
				...response.data.data[key],
				id: key
			} );
		}

		meta = response.data.meta

		yield put(actions.fetchNewArrivalsSuccess(fetchedProducts, meta));
	} catch (err) {
		yield put(actions.fetchNewArrivalsFail(err));
	}
}
