import { put } from 'redux-saga/effects';
import axios from '../../axios-api';

import * as actions from '../actions/index';

export function* fetchProductBySlugSaga(action) {
	yield put(actions.fetchProductBySlugStart());

	try {
		const response = yield axios.get( `/products/${action.productSlug}` )
		const fetchedProduct = response.data.data;

		yield put(actions.fetchProductBySlugSuccess(fetchedProduct));
	} catch (err) {
		yield put(actions.fetchProductBySlugFail(err));
	}
}