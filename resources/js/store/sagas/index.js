import { takeEvery, all, takeLatest } from 'redux-saga/effects';
import * as actionTypes from '../actions/actionTypes';

import { fetchAllProductsSaga } from './products';
import { fetchTopSellersSaga } from './topSellers';
import { fetchNewArrivalsSaga } from './newArrivals';
import { fetchAllCategoriesSaga } from './categories';
import { fetchCategoryBySlugSaga } from './category';
import { fetchCategoryListSaga } from './categoryList';
import { fetchProductBySlugSaga } from './product';

export function* watchProducts() {
	yield takeEvery(actionTypes.FETCH_ALL_PRODUCTS, fetchAllProductsSaga);
}

export function* watchTopSellers() {
	yield takeEvery(actionTypes.FETCH_TOP_SELLERS, fetchTopSellersSaga);
}

export function* watchNewArrivals() {
	yield takeEvery(actionTypes.FETCH_NEW_ARRIVALS, fetchNewArrivalsSaga);
}

export function* watchCategories() {
	yield takeEvery(actionTypes.FETCH_ALL_CATEGORIES, fetchAllCategoriesSaga);
}

export function* watchCategory() {
	yield takeEvery(actionTypes.FETCH_CATEGORY_BY_SLUG, fetchCategoryBySlugSaga);
}

export function* watchCategoryList() {
	yield takeEvery(actionTypes.FETCH_CATEGORY_LIST, fetchCategoryListSaga);
}

export function* watchProduct() {
	yield takeEvery(actionTypes.FETCH_PRODUCT_BY_SLUG, fetchProductBySlugSaga);
}
