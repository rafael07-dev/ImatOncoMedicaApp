import React from "react";

const Table = ({colums, data}) => {

    return (
        <table className="bg-white border border-gray-300 mt-5">
            <thead className="bg-gray">
                <tr className="bg-gray-800 text-white">
                    {
                        colums.map((column, i) => (
                            <th className="px-4 border border-b border-gray-300" key={i}>{column}</th>
                        ))
                    }
                </tr>
            </thead>

            <tbody>
                {
                    data.map((row, i) => (
                        <tr className="hover:bg-gray-100" key={i}>
                            {
                                colums.map((colum, colIndex) => (
                                    <td className="px-2 border border-b border-gray-300" key={colIndex}>{row[colum]}</td>
                                ))
                            }
                        </tr>
                    ))
                }
            </tbody>
        </table>
    );
}


export default Table;