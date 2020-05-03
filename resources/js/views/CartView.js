import React, { Component } from "react";
import { connect } from "react-redux";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faChevronLeft } from "@fortawesome/free-solid-svg-icons";

import Aux from "../hoc/Aux/Aux";
import CartTable from "../components/Table/Table";
import EmptyCart from "./EmptyCart";
import CheckoutButtons from "../components/Cart/CheckoutButtons";

class CartView extends Component {
    render() {
        let { items } = this.props;
        let thItems = [
            "Product",
            "Number",
            "Unit price (RRP)",
            "You save*",
            "Your price",
            "Total price"
        ];
        let displayCartItems = <EmptyCart />;

        if (items.length) {
            displayCartItems = (
                <Aux>
                    <div className="flex">
                        <div className="w-2/6">
                            <h2 className="text-3xl font-semibold">
                                shopping cart
                            </h2>
                            <p className="text-red mt-3">
                                Items in shopping cart are not reserved!
                            </p>
                        </div>
                        <div className="w-3/6 ml-auto">
                            <CheckoutButtons />
                        </div>
                    </div>

                    <CartTable cartItems={items} tableHead={thItems} />

                    <div className="flex mt-16">
                        <div className="w-2/6">
                            <button
                                onClick={this.goHome}
                                className="bg-transparent text-sm text-gray-darkest font-semibold py-2 px-4 border border-gray-darker"
                            >
                                <FontAwesomeIcon
                                    icon={faChevronLeft}
                                    className="mr-2"
                                />
                                Continue shopping
                            </button>
                        </div>
                        <div className="w-3/6 ml-auto">
                            <CheckoutButtons />
                        </div>
                    </div>

                    <p className="text-right text-xs text-gray-darker mt-2">
                        * on the manufacturer's recommended retail price
                    </p>
                </Aux>
            );
        }

        return displayCartItems;
    }
}

const mapStateToProps = state => {
    return {
        items: state.cart.items,
        error: state.cart.error
    };
};

export default connect(mapStateToProps)(CartView);
