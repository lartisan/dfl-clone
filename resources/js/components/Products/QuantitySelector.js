import React, { Component } from "react";

import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faAngleDown } from "@fortawesome/free-solid-svg-icons";

class QuantitySelector extends Component {
    updateQty = e => this.props.selectOnChange(e);

    render() {
        let { selectedValue } = this.props;

        return (
            <div className="inline-block relative w-16">
                <select
                    value={selectedValue}
                    onChange={this.updateQty}
                    className="block appearance-none w-full bg-gray-light border border-gray-light hover:border-grey px-4 py-2 pr-8 leading-tight focus:outline-none"
                >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <div className="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-gray-darker">
                    <FontAwesomeIcon icon={faAngleDown} className="" />
                </div>
            </div>
        );
    }
}

export default QuantitySelector;
