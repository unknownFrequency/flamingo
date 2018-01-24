import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Klippekort from './Klippekort';

/* Main Component */
class Main extends Component {

  constructor(props) {
    super(props);

    this.state = {
      hoursMax: 0,
      hoursSpend: 0
    }
  }

  componentWillMount() {
    // fetch('/api/klippekort')
    //   .then(response => {
    //     return response.json();
    //   })
    //   .then(klippekorts => {
    //     klippekorts.forEach((klippekort) => {
          this.setState({
            hoursMax: this.props.hoursmax,
            hoursSpend: this.props.hoursspend
          });
    //     })
    //   })
    //   .catch(e => console.log(e));
  }


  handleClick(product) {
    //handleClick is used to set the state
    this.setState({currentProduct:product});

  }

  render() {
    // console.log(this.state);
    return (
      <div>
        <Klippekort hoursMax={this.state.hoursMax} hoursSpend={this.state.hoursSpend} />
      </div>
    );
  }
}
// export default Main;
if (document.getElementById('main')) {
  const element = document.getElementById('main');
  const props = Object.assign({}, element.dataset);
  ReactDOM.render(<Main {...props} />, element);
}
