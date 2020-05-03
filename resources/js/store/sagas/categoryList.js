import { put } from 'redux-saga/effects';
import axios from '../../axios-api';

import * as actions from '../actions/index';

export function* fetchCategoryListSaga(action) {
	yield put(actions.fetchCategoryListStart());
		
	try {
		const response = yield axios.get( `/categories/${action.category}/${action.categoryList}` )
		const fetchedCategoryList = response.data.data

		yield put(actions.fetchCategoryListSuccess(fetchedCategoryList));
	} catch (err) {
		yield put(actions.fetchCategoryListFail(err));
	}
}
