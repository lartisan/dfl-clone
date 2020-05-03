import { createBrowserHistory } from "history";
import { createStore, applyMiddleware, compose } from "redux";
import { routerMiddleware } from "connected-react-router";
import thunk from "redux-thunk";
import createSagaMiddleware from "redux-saga";

import rootReducer from "./reducers";
import {
    watchProducts,
    watchTopSellers,
    watchNewArrivals,
    watchCategories,
    watchCategory,
    watchCategoryList,
    watchProduct
} from "./sagas";

export const history = createBrowserHistory();

const composeEnhancers =
    process.env.NODE_ENV === "development"
        ? window.__REDUX_DEVTOOLS_EXTENSION_COMPOSE__
        : null || compose;

const sagaMiddleware = createSagaMiddleware();

const store = createStore(
    // rootReducer,
    rootReducer(history),
    composeEnhancers(
        applyMiddleware(routerMiddleware(history), thunk, sagaMiddleware)
    )
);

sagaMiddleware.run(watchProducts);
sagaMiddleware.run(watchTopSellers);
sagaMiddleware.run(watchNewArrivals);
sagaMiddleware.run(watchCategories);
sagaMiddleware.run(watchCategory);
sagaMiddleware.run(watchCategoryList);
sagaMiddleware.run(watchProduct);

export default store;
