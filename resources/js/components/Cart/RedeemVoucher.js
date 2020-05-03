import React, { Component } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faAngleDown, faInfoCircle } from "@fortawesome/free-solid-svg-icons";
import { connect } from "react-redux";

import Aux from "../../hoc/Aux/Aux";
import { priceFormat } from "../../shared/currency";

class RedeemVoucher extends Component {
    state = {
        formVisible: false
    };

    showForm = () => this.setState({ formVisible: true });
    hideForm = () => this.setState({ formVisible: false });

    render() {
        let voucherForm = (
            <p
                onClick={this.showForm}
                className="text-sm cursor-pointer hover:underline"
            >
                Redeem voucher code
            </p>
        );

        if (this.state.formVisible) {
            voucherForm = (
                <form className="w-full max-w-sm">
                    <div className="flex items-center border-b border-b-2 border-green py-2">
                        <input
                            className="appearance-none bg-transparent border-none w-full text-gray-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                            type="text"
                            placeholder="Jane Doe"
                            aria-label="Full name"
                        />
                        <button
                            className="flex-no-shrink bg-green hover:bg-green-dark border-green hover:border-green-dark text-sm border-4 text-white py-1 px-2 rounded"
                            type="button"
                        >
                            Redeem
                        </button>
                        <button
                            onClick={this.hideForm}
                            className="flex-no-shrink border-transparent border-4 text-green hover:text-green-darker text-sm py-1 px-2 rounded"
                            type="button"
                        >
                            Cancel
                        </button>
                    </div>
                </form>
            );
        }

        return (
            <Aux>
                {/* LEFT */}
                <div className="w-7/12">
                    <div className="flex-flex-col">{voucherForm}</div>
                </div>

                {/* RIGHT */}
                <div className="w-5/12">
                    <div className="flex flex-wrap py-2">
                        <div className="w-1/3">Subtotal:</div>
                        <div className="w-1/3 ml-auto text-right">
                            {priceFormat(this.props.subTotal)}
                        </div>
                    </div>

                    <div className="flex flex-wrap py-2">
                        <div className="w-5/12 mt-2">Delivery country:</div>
                        <div className="w-7/12 ml-auto">
                            <div className="inline-block relative w-full">
                                <select className="block appearance-none w-full bg-gray-light border border-gray-light hover:border-grey px-4 py-2 pr-8 leading-tight focus:outline-none">
                                    <option value="1">Germany</option>
                                    <option value="2">Romania</option>
                                    <option value="3">Israel</option>
                                </select>
                                <div className="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-gray-darker">
                                    <FontAwesomeIcon
                                        icon={faAngleDown}
                                        className=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="flex flex-wrap py-2">
                        <div className="w-5/12 mt-2">Shipping method:</div>
                        <div className="w-7/12 ml-auto">
                            <div className="inline-block relative w-full">
                                <select className="block appearance-none w-full bg-gray-light border border-gray-light hover:border-grey px-4 py-2 pr-8 leading-tight focus:outline-none">
                                    <option value="1">
                                        DHL Standard Delivery
                                    </option>
                                    <option value="2">
                                        DHL Express Delivery
                                    </option>
                                </select>
                                <div className="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-gray-darker">
                                    <FontAwesomeIcon
                                        icon={faAngleDown}
                                        className=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="flex flex-wrap pt-2 pb-6 border-b border-gray-light">
                        <div className="w-5/12">
                            Delivery costs
                            <FontAwesomeIcon
                                icon={faInfoCircle}
                                className="ml-2"
                            />
                            :
                        </div>
                        <div className="w-7/12 ml-auto text-right">5.99 €</div>
                    </div>
                </div>
            </Aux>
        );
    }
}

const mapStateToProps = state => {
    return {
        subTotal: state.cart.subTotal,
        error: state.cart.error
    };
};

export default connect(mapStateToProps)(RedeemVoucher);
