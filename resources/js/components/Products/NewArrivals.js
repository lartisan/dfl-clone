import React, { Component } from 'react'
import { connect } from 'react-redux';

import * as actions from '../../store/actions/index';
import Aux from '../../hoc/Aux/Aux'
import Spinner from '../UI/Spinner/Spinner'
import Carousel from '../Carousel/Carousel';

class NewArrivals extends Component {
    componentDidMount() {
        this.props.onFetchNewArrivals(1);
	}

	onPageChanged = (currentPage) => this.props.onFetchNewArrivals(currentPage);
	
    render() {
        let { products } = this.props

        return (
			<Aux>
                <h2 className="text-center my-6 text-3xl text-grey-darkest">New Arrivals</h2>

				{
					products && products.length 
						? <Carousel products={products} onPageChanged={this.onPageChanged} lastPage={this.props.lastPage} /> 
						: <Spinner />
				}
            </Aux>
        )
    }
}

const mapStateToProps = state => {
    return {
        products: state.newArrivals.products,
        currentPage: state.newArrivals.currentPage,
        lastPage: state.newArrivals.lastPage,
        error: state.newArrivals.error,
    }
}

const mapDispatchToProps = dispatch => {
    return {
        onFetchNewArrivals: (page) => dispatch(actions.fetchNewArrivals(page)),
    }
}

export default connect(mapStateToProps, mapDispatchToProps)(NewArrivals)
