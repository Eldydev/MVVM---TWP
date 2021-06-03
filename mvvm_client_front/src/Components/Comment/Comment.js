import React, { Component } from "react";

class Comment extends Component {
    constructor(props) {
        super(props);
        this.state = {
        }

    }
    componentDidMount() {
    }
    Mapping(){
        <div className="" >
        {data.map((event, i) => {
            return (
                <div className='' key={i}>
                    <p>date : {event.date}</p>
                    <p>commentaire : {event.label}</p>
                </div>
            )
        })}
    </div>
    }
    render() {
        <div>Comment</div>
    }


}
export default Comment