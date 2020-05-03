import React, { Component } from 'react'
import { connect } from 'react-redux';

import * as actions from '../../store/actions/index';
import Aux from '../../hoc/Aux/Aux'
import Spinner from '../UI/Spinner/Spinner'
import Carousel from '../Carousel/Carousel';

class TopSellers extends Component {
    componentDidMount() {
        this.props.onFetchTopSellers(1);
	}

	onPageChanged = (currentPage) => this.props.onFetchTopSellers(currentPage);
	
    render() {
        let { products } = this.props

        return (
			<Aux>
                <h2 className="text-center my-6 text-3xl text-grey-darkest">Top Sellers</h2>

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
        products: state.topSellers.products,
        currentPage: state.topSellers.currentPage,
        lastPage: state.topSellers.lastPage,
        error: state.topSellers.error,
    }
}

const mapDispatchToProps = dispatch => {
    return {
        onFetchTopSellers: (page) => dispatch(actions.fetchTopSellers(page)),
    }
}

export default connect(mapStateToProps, mapDispatchToProps)(TopSellers)
