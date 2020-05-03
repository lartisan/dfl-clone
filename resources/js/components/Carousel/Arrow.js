import React from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import {
    faChevronLeft,
    faChevronRight
} from "@fortawesome/free-solid-svg-icons";

const Arrow = ({ direction, clickFunction }) => {
    const position =
        direction === "r"
            ? { top: "50%", right: "-3%" }
            : { top: "50%", left: "-3%" };
    return (
        <div
            className={`cursor-pointer text-gray-dark hover:text-black mx-2 absolute pin-${direction}`}
            style={position}
            onClick={clickFunction}
        >
            <FontAwesomeIcon
                icon={direction === "l" ? faChevronLeft : faChevronRight}
                className="fa-2x"
            />
        </div>
    );
};

export default Arrow;
