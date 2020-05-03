import { combineReducers } from "redux";
import { connectRouter } from "connected-react-router";

import productsReducer from "./products";
import topSellersReducer from "./topSellers";
import newArrivalsReducer from "./newArrivals";
import categoriesReducer from "./categories";
import categoryReducer from "./category";
import categoryListReducer from "./categoryList";
import productReducer from "./product";
// import cartReducer from './cart';

const rootReducer = history =>
    combineReducers({
        router: connectRouter(history),
        products: productsReducer,
        topSellers: topSellersReducer,
        newArrivals: newArrivalsReducer,
        categories: categoriesReducer,
        category: categoryReducer,
        categoryList: categoryListReducer,
        product: productReducer
        // cart: cartReducer
    });

export default rootReducer;
