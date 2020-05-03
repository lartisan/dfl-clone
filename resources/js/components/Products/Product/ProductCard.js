import React, { Component } from "react";
import { NavLink } from "react-router-dom";

import { priceFormat, discountFormat } from "../../../shared/currency";

class ProductCard extends Component {
    render() {
        let { product, imgClasses } = this.props;

        const imgStyle = {
            background:
                "url(" + product.image.path + ") no-repeat center center/cover"
        };

        return (
            <NavLink
                to={"/products/" + product.slug}
                className="rounded-lg shadow hover:shadow-lg mx-2 flex flex-col flex-1 no-underline transition hover:scale-2"
            >
                <div className={imgClasses} style={imgStyle}></div>

                <div className="p-6 flex flex-col flex-1">
                    <h3 className="mb-3 text-gray-darkest text-sm text-center">
                        {product.brand.name}
                    </h3>
                    <div className="flex flex-wrap">
                        <div className="w-1/2 line-through text-xs text-black ml-auto">
                            {priceFormat(product.rrp)}
                        </div>
                        <div className="w-1/2 line-through text-xs text-black mr-auto border-black border-l pl-3">
                            {priceFormat(product.final_price)}
                        </div>
                    </div>
                    <p className="text-xs text-black text-center my-2">
                        -20% extra
                    </p>
                    <p className="text-xs text-red text-center">
                        {discountFormat(product.rrp, product.discount + 20)}
                    </p>
                </div>
            </NavLink>
        );
    }
}

export default ProductCard;
