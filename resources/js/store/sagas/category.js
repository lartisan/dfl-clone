import { put } from 'redux-saga/effects';
import axios from '../../axios-api';

import * as actions from '../actions/index';

export function* fetchCategoryBySlugSaga(action) {
	yield put(actions.fetchCategoryBySlugStart());

	try {
		const response = yield axios.get( `/categories/${action.categorySlug}` )
		const fetchedCategory = response.data.data;

		yield put(actions.fetchCategoryBySlugSuccess(fetchedCategory));
	} catch (err) {
		yield put(actions.fetchCategoryBySlugFail(err));
	}
}