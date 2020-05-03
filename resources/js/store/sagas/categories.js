import { put } from 'redux-saga/effects';
import axios from '../../axios-api';

import * as actions from '../actions/index';

export function* fetchAllCategoriesSaga(action) {
	yield put(actions.fetchAllCategoriesStart());
		
	try {
		const response = yield axios.get( '/categories' )
		const fetchedCategories = [];

		for ( let key in response.data.data ) {
			fetchedCategories.push( {
				...response.data.data[key],
				id: key
			} );
		}

		yield put(actions.fetchAllCategoriesSuccess(fetchedCategories));
	} catch (err) {
		yield put(actions.fetchAllCategoriesFail(err));
	}
}
