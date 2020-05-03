import React, { Component } from "react";
import Aux from "../../hoc/Aux/Aux";

import ProductCard from "../Products/Product/ProductCard";

class OurRecommendations extends Component {
    render() {
        let { products } = this.props;
        return (
            <Aux>
                <h2 className="text-center my-6 text-xl text-gray-darkest">
                    Our recommendations
                </h2>

                <div className="flex flex-wrap max-w-2xl mx-auto my-8">
                    {products.map((product, key) => (
                        <div
                            className="w-full md:w-1/2 lg:w-1/6 flex flex-col"
                            key={key}
                        >
                            <ProductCard
                                imgClasses="aspect-3x4 rounded-t"
                                product={product}
                            />
                        </div>
                    ))}
                </div>
            </Aux>
        );
    }
}

export default OurRecommendations;
