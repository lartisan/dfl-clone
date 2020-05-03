import React, { Component } from 'react'
import { Route, Switch, withRouter, Redirect } from 'react-router-dom';
import { connect } from 'react-redux'

import Layout from '../hoc/Layout/Layout';
import Landing from '../views/Landing'
import CategoryView from '../views/CategoryView'
import CategoryList from '../views/CategoryList'
import ProductView from '../views/ProductView';
import CartView from '../views/CartView';

class App extends Component {
    render() {
		// let { match } = this.props
		let routes= (
			<Switch>
				<Route path="/products/:product" component={ProductView} />
				<Route path="/:category/:categoryList" component={CategoryList} />
				<Route path="/cart" component={CartView} />
				<Route path="/:category" component={CategoryView} />
				<Route exact path="/" component={Landing} />
				<Redirect to="/" />
			</Switch>
		)

        return (
			<Layout>
	            {routes}
			</Layout>
        )
    }
}

export default withRouter(connect()(App));
