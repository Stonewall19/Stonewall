const path = require('path');

module.exports = {
  entry: './src/index.js',
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'dist'),
  },
  module: {
    rules: [
      {
        test: /\.jsx?$/, // Match both .js and .jsx files
        exclude: /node_modules/, // Exclude node_modules
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env', '@babel/preset-react'], // Support for ES6 and React
          },
        },
      },
    ],
  },
  resolve: {
    extensions: ['.js', '.jsx'], // Extensions to resolve
  },
  devtool: 'source-map', // Enable source maps for debugging
};